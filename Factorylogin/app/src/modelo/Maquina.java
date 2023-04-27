package modelo;

import java.util.ArrayList;
import java.util.List;

public class Maquina {
    private int id_maquina;
    private String nom_maquina;
    private String descripcio;

    public Maquina(int id_maquina, String nom_maquina, String descripcio) {
        this.id_maquina = id_maquina;
        this.nom_maquina = nom_maquina;
        this.descripcio = descripcio;
    }

    public static List<Maquina> getMaquinas(){
        List<Maquina> maquinas = new ArrayList<>();

        maquinas.add(new Maquina(1, "KM1002", "Maquina d'injecció termoplástica."));
        maquinas.add(new Maquina(2, "IO53", "Maquina d'embalatge."));
        maquinas.add(new Maquina(3, "AD48", "Robot."));

        return maquinas;
    }

    public int getId_maquina() {
        return id_maquina;
    }

    public void setId_maquina(int id_maquina) {
        this.id_maquina = id_maquina;
    }

    public String getNom_maquina() {
        return nom_maquina;
    }

    public void setNom_maquina(String nom_maquina) {
        this.nom_maquina = nom_maquina;
    }

    public String getDescripcio() {
        return descripcio;
    }

    public void setDescripcio(String descripcio) {
        this.descripcio = descripcio;
    }
}
