package com.example.factorysistemsapp.fragments;

import android.os.Bundle;

import androidx.fragment.app.Fragment;
import androidx.navigation.NavController;
import androidx.navigation.fragment.NavHostFragment;
import androidx.recyclerview.widget.LinearLayoutManager;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import com.example.factorysistemsapp.R;
import com.example.factorysistemsapp.adapters.ErrorsAdapter;
import com.example.factorysistemsapp.databinding.FragmentActiveErrorsBinding;
import com.example.factorysistemsapp.modelo.Errores;
import com.example.factorysistemsapp.modelo.Maquina;
import com.example.factorysistemsapp.modelo.Treballador;

import java.sql.SQLOutput;
import java.util.List;

public class ActiveErrorsFragment extends Fragment implements ErrorsAdapter.ErrorSelectedListener{

    FragmentActiveErrorsBinding binding;
    Fragment frag = this;
    ErrorsAdapter adapter;

    //Lists
    private List<Errores> errores = Errores.getErrors();
    private List<Maquina> maquinas = Maquina.getMaquinas();
    private List<Treballador> treballadors = Treballador.getTreballadors();

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

        binding.rcyActiveErrors.setLayoutManager(new LinearLayoutManager(getContext()));
        binding.rcyActiveErrors.hasFixedSize();

        adapter = new ErrorsAdapter(errores, maquinas, treballadors, this);

        binding.rcyActiveErrors.setAdapter(adapter);

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