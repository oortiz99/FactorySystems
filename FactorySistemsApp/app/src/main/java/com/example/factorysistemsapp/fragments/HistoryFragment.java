package com.example.factorysistemsapp.fragments;

import static com.example.factorysistemsapp.MainActivity.getDrawer;
import static com.example.factorysistemsapp.MainActivity.navigationView;

import android.os.Bundle;

import androidx.annotation.NonNull;
import androidx.core.view.GravityCompat;
import androidx.drawerlayout.widget.DrawerLayout;
import androidx.fragment.app.Fragment;
import androidx.navigation.NavController;
import androidx.navigation.Navigation;
import androidx.navigation.fragment.NavHostFragment;
import androidx.navigation.ui.NavigationUI;
import androidx.recyclerview.widget.LinearLayoutManager;

import android.view.LayoutInflater;
import android.view.MenuItem;
import android.view.View;
import android.view.ViewGroup;

import com.example.factorysistemsapp.R;
import com.example.factorysistemsapp.adapters.ErrorsAdapter;
import com.example.factorysistemsapp.databinding.FragmentDetailsBinding;
import com.example.factorysistemsapp.databinding.FragmentHistoryBinding;
import com.example.factorysistemsapp.modelo.Errores;
import com.example.factorysistemsapp.modelo.Maquina;
import com.example.factorysistemsapp.modelo.Treballador;
import com.google.android.material.navigation.NavigationView;

import java.util.ArrayList;
import java.util.List;

public class HistoryFragment extends Fragment implements ErrorsAdapter.ErrorSelectedListener{

    FragmentHistoryBinding binding;
    ErrorsAdapter adapter;
    public boolean teAdapter = false;

    //Lists
    private List<Errores> errores = Errores.getErrors();
    private List<Errores> erroresSolucionados = new ArrayList<>();
    private List<Maquina> maquinas = Maquina.getMaquinas();
    private List<Treballador> treballadors = Treballador.getTreballadors();

    DrawerLayout drawerLayout;
    Fragment frag = this;

    public HistoryFragment() {

    }

    public static HistoryFragment newInstance() {
        HistoryFragment fragment = new HistoryFragment();
        Bundle args = new Bundle();
        fragment.setArguments(args);
        return fragment;
    }

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        if (getArguments() != null) {
        }
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        binding = FragmentHistoryBinding.inflate(inflater, container, false);

        drawerLayout = getDrawer();

        //Nav controller BUTTON for Navigation
        binding.imbMenuButton.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                drawerLayout.openDrawer(GravityCompat.START);
            }
        });

        // Nav controller
        NavController navController = Navigation.findNavController(getActivity(), R.id.nav_host_fragment);
        NavigationUI.setupWithNavController(navigationView, navController);
        navigationView.setNavigationItemSelectedListener(new NavigationView.OnNavigationItemSelectedListener() {
            @Override
            public boolean onNavigationItemSelected(@NonNull MenuItem item) {
                switch (item.getItemId()){
                    case R.id.navigation_activeErrors:
                        NavController navController =  NavHostFragment.findNavController(frag);
                        navController.navigate(R.id.action_historyFragment_to_activeErrorsFragment);
                        drawerLayout.close();
                        break;
                    case R.id.navigation_history:
                        drawerLayout.close();
                        break;
                }
                return false;
            }
        });

        binding.rcyHistory.setLayoutManager(new LinearLayoutManager(getContext()));
        binding.rcyHistory.hasFixedSize();

        if(!teAdapter){
            for (Errores e: errores){
                if(e.getEstat_error().equals("Solucionat")){
                    erroresSolucionados.add(e);
                }
            }

            adapter = new ErrorsAdapter(erroresSolucionados, maquinas, treballadors, this);

            binding.rcyHistory.setAdapter(adapter);

            teAdapter = true;
        }

        if(teAdapter){
            binding.rcyHistory.setAdapter(null);
            binding.rcyHistory.setAdapter(adapter);
        }

        return binding.getRoot();
    }

    @Override
    public void onErrorSelected(Errores seleccionada) {
        NavController navController =  NavHostFragment.findNavController(frag);

        Bundle args = new Bundle();
        args.putSerializable(DetailsFragment.ERROR, seleccionada);

        navController.navigate(R.id.action_historyFragment_to_detailsFragment, args);
    }
}