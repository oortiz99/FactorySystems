package com.example.factorysistemsapp.modelo;

import java.util.ArrayList;
import java.util.List;

public class Treballador {
    private int id_treballador;
    private String nom;
    private String cognoms;
    private String rol;
    private String data_incorporacio;

    public Treballador(int id_treballador, String nom, String cognoms, String rol, String data_incorporacio) {
        this.id_treballador = id_treballador;
        this.nom = nom;
        this.cognoms = cognoms;
        this.rol = rol;
        this.data_incorporacio = data_incorporacio;
    }

    public static List<Treballador> getTreballadors(){
        List<Treballador> treballadors = new ArrayList<>();

        treballadors.add(new Treballador(1, "Jonathan", "Rodriguez", "Operari","29/09/2003"));
        treballadors.add(new Treballador(2, "Oscar", "Ortiz", "Operari","20/05/2000"));

        return treballadors;
    }

    public int getId_treballador() {
        return id_treballador;
    }

    public void setId_treballador(int id_treballador) {
        this.id_treballador = id_treballador;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getCognoms() {
        return cognoms;
    }

    public void setCognoms(String cognoms) {
        this.cognoms = cognoms;
    }

    public String getRol() {
        return rol;
    }

    public void setRol(String rol) {
        this.rol = rol;
    }

    public String getData_incorporacio() {
        return data_incorporacio;
    }

    public void setData_incorporacio(String data_incorporacio) {
        this.data_incorporacio = data_incorporacio;
    }
}