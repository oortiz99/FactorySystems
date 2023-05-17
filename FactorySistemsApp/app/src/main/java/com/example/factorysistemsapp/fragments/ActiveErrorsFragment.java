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
import com.example.factorysistemsapp.databinding.FragmentActiveErrorsBinding;
import com.example.factorysistemsapp.modelo.Errores;
import com.example.factorysistemsapp.modelo.Maquina;
import com.example.factorysistemsapp.modelo.Treballador;
import com.google.android.material.bottomnavigation.BottomNavigationView;
import com.google.android.material.navigation.NavigationBarView;
import com.google.android.material.navigation.NavigationView;

import java.sql.SQLOutput;
import java.util.ArrayList;
import java.util.List;

import modelo.Errores;
import modelo.Maquina;
import modelo.Treballador;

public class ActiveErrorsFragment extends Fragment implements ErrorsAdapter.ErrorSelectedListener{

    FragmentActiveErrorsBinding binding;
    Fragment frag = this;
    ErrorsAdapter adapter;
    public boolean teAdapter = false;

    //Lists
    private List<Errores> errores = Errores.getErrors();
    private List<Errores> erroresActivos = new ArrayList<>();
    private List<Maquina> maquinas = Maquina.getMaquinas();
    private List<Treballador> treballadors = Treballador.getTreballadors();

    DrawerLayout drawerLayout;

    public ActiveErrorsFragment() {

    }

    public static ActiveErrorsFragment newInstance() {
        ActiveErrorsFragment fragment = new ActiveErrorsFragment();
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
        binding = FragmentActiveErrorsBinding.inflate(inflater, container, false);

        drawerLayout = getDrawer();

        //Botón del menú deslizante
        binding.imbMenuButton.setOnClickListener(new View.OnClickListener(){
            @Override
            public void onClick(View v){
                drawerLayout.openDrawer(GravityCompat.START);
            }
        });

        NavController navController = Navigation.findNavController(getActivity(), R.id.nav_host_fragment);
        NavigationUI.setupWithNavController(navigationView, navController);
        navigationView.setNavigationItemSelectedListener(new NavigationView.OnNavigationItemSelectedListener() {
            @Override
            public boolean onNavigationItemSelected(@NonNull MenuItem item) {
                item.setChecked(true);
                switch (item.getItemId()){
                    case R.id.navigation_activeErrors:
                        drawerLayout.close();
                        break;
                    case R.id.navigation_history:
                        NavController navController =  NavHostFragment.findNavController(frag);
                        navController.navigate(R.id.action_activeErrorsFragment_to_historyFragment);
                        drawerLayout.close();
                        break;
                }
                return false;
            }
        });

        binding.rcyActiveErrors.setLayoutManager(new LinearLayoutManager(getContext()));
        binding.rcyActiveErrors.hasFixedSize();

        if(!teAdapter){
            for (Errores e: errores){
                if(e.getEstat_error().equals("En curs") || e.getEstat_error().equals("Pendent")){
                    erroresActivos.add(e);
                }
            }

            adapter = new ErrorsAdapter(erroresActivos, maquinas, treballadors, this);

            binding.rcyActiveErrors.setAdapter(adapter);

            teAdapter = true;
        }

        if(teAdapter){
            binding.rcyActiveErrors.setAdapter(null);
            binding.rcyActiveErrors.setAdapter(adapter);
        }

        return binding.getRoot();
    }

    @Override
    public void onErrorSelected(Errores seleccionada) {
        NavController navController =  NavHostFragment.findNavController(frag);

        Bundle args = new Bundle();
        args.putSerializable(DetailsFragment.ERROR, seleccionada);

        navController.navigate(R.id.action_activeErrorsFragment_to_detailsFragment, args);
    }
}