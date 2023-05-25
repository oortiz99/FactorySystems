package com.example.factorysistemsapp.fragments;

import android.graphics.Color;
import android.graphics.drawable.Drawable;
import android.os.Bundle;

import androidx.fragment.app.Fragment;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import com.example.factorysistemsapp.R;
import com.example.factorysistemsapp.adapters.ErrorsAdapter;
import com.example.factorysistemsapp.databinding.FragmentDetailsBinding;
import com.example.factorysistemsapp.modelo.Errores;
import com.example.factorysistemsapp.modelo.Maquina;
import com.example.factorysistemsapp.modelo.Treballador;

import modelo.Errores;
import modelo.Maquina;
import modelo.Treballador;

public class DetailsFragment extends Fragment{

    FragmentDetailsBinding binding;
    public static final String ERROR = "error";

    private Errores mError;

    private String green = "#00FF00";
    private String orange = "#FF8000";
    private String red = "#FF0000";

    public DetailsFragment() {
    }

    public static DetailsFragment newInstance(String param1) {
        DetailsFragment fragment = new DetailsFragment();
        Bundle args = new Bundle();
        args.putSerializable(ERROR, param1);
        fragment.setArguments(args);
        return fragment;
    }

    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        if (getArguments() != null) {
            mError = (Errores) getArguments().getSerializable(ERROR);
        }
    }

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment
        binding = FragmentDetailsBinding.inflate(inflater, container, false);

        for(Maquina m: Maquina.getMaquinas()){
            if(m.getId_maquina() == mError.getId_maquina()){
                binding.txvNomMaquina.setText(m.getNom_maquina());
            }
        }

        for(Treballador t: Treballador.getTreballadors()){
            if(t.getId_treballador() == mError.getId_treballador()){
                binding.txvTreballador.setText(t.getNom() + " " + t.getCognoms());
            }
        }

        if(mError.getEstat_error().equals("Pendent")){
            Drawable filaBg = binding.txvNomMaquina.getBackground();
            filaBg.setTint(Color.parseColor(red));
        }else if(mError.getEstat_error().equals("Solucionat")){
            Drawable filaBg = binding.txvNomMaquina.getBackground();
            filaBg.setTint(Color.parseColor(green));
        }else{
            Drawable filaBg = binding.txvNomMaquina.getBackground();
            filaBg.setTint(Color.parseColor(orange));
        }

        binding.txvTipusError.setText(mError.getTipus_error());

        binding.txvDescripcioError.setText(mError.getDescripcio_error());

        return binding.getRoot();
    }
}