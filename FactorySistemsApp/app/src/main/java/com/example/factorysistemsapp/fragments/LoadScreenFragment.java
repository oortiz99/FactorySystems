package com.example.factorysistemsapp.fragments;

import android.os.Bundle;
import android.os.Handler;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import androidx.fragment.app.Fragment;
import androidx.navigation.NavController;
import androidx.navigation.fragment.NavHostFragment;

import com.example.factorysistemsapp.R;

public class LoadScreenFragment extends Fragment {

    Fragment frag = this;

    public LoadScreenFragment() {

    }

    public static LoadScreenFragment newInstance() {
        LoadScreenFragment fragment = new LoadScreenFragment();
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
        View view = inflater.inflate(R.layout.fragment_load_screen, container, false);

        new Handler().postDelayed(new Runnable() {
            @Override
            public void run() {
                NavController navController =  NavHostFragment.findNavController(frag);
                navController.navigate(R.id.action_loadScreenFragment_to_activeErrorsFragment);
            }
        }, 2000);

        // devolver la vista inflada
        return view;
    }
}