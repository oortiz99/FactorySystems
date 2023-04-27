package modelo;

import android.os.Parcel;
import android.os.Parcelable;

import androidx.annotation.NonNull;

import java.io.Serializable;
import java.util.ArrayList;
import java.util.List;
import java.time.LocalDateTime;

public class Errores implements Parcelable, Serializable {
    private int id_treballador;
    private int id_maquina;
    private String estat_error;
    private String tipus_error;
    private String descripcio_error;
    private LocalDateTime hora_error;

    public Errores(int id_treballador, int id_maquina, String estat_error, String tipus_error, String descripcio_error, LocalDateTime hora_error) {
        this.id_treballador = id_treballador;
        this.id_maquina = id_maquina;
        this.estat_error = estat_error;
        this.tipus_error = tipus_error;
        this.descripcio_error = descripcio_error;
        this.hora_error = hora_error;
    }

    protected Errores(Parcel in) {
        id_treballador = in.readInt();
        id_maquina = in.readInt();
        estat_error = in.readString();
        tipus_error = in.readString();
        descripcio_error = in.readString();
    }

    public static List<Errores> getErrors(){
        List<Errores> errores = new ArrayList<>();

        LocalDateTime ld1 = LocalDateTime.of(2023, 4, 25, 12, 20);
        LocalDateTime ld2 = LocalDateTime.of(2023, 4, 23, 11, 14);
        LocalDateTime ld3 = LocalDateTime.of(2023, 4, 22, 9, 53);
        LocalDateTime ld4 = LocalDateTime.of(2023, 4, 14, 16, 41);

        errores.add( new Errores(1, 1, "Pendent", "Error Mecànic", "La cadena del motor no funciona correctament.", ld1));
        errores.add( new Errores(2, 2, "Pendent", "Error Mecànic", "La cadena del motor no funciona correctament.", ld2));
        errores.add( new Errores(1, 3, "En curs", "Error de configuració", "L'ordinador està mal configurat.", ld3));
        errores.add( new Errores(1, 2, "Solucionat", "Error de configuració", "L'ordinador està mal configurat.", ld4));

        return errores;
    }

    public static final Creator<Errores> CREATOR = new Creator<Errores>() {
        @Override
        public Errores createFromParcel(Parcel in) {
            return new Errores(in);
        }

        @Override
        public Errores[] newArray(int size) {
            return new Errores[size];
        }
    };

    public LocalDateTime getHora_error() {
        return hora_error;
    }

    public void setHora_error(LocalDateTime hora_error) {
        this.hora_error = hora_error;
    }

    public int getId_treballador() {
        return id_treballador;
    }

    public void setId_treballador(int id_treballador) {
        this.id_treballador = id_treballador;
    }

    public int getId_maquina() {
        return id_maquina;
    }

    public void setId_maquina(int id_maquina) {
        this.id_maquina = id_maquina;
    }

    public String getEstat_error() {
        return estat_error;
    }

    public void setEstat_error(String estat_error) {
        this.estat_error = estat_error;
    }

    public String getTipus_error() {
        return tipus_error;
    }

    public void setTipus_error(String tipus_error) {
        this.tipus_error = tipus_error;
    }

    public String getDescripcio_error() {
        return descripcio_error;
    }

    public void setDescripcio_error(String descripcio_error) {
        this.descripcio_error = descripcio_error;
    }

    @Override
    public int describeContents() {
        return 0;
    }

    @Override
    public void writeToParcel(Parcel parcel, int i) {
        parcel.writeInt(id_maquina);
        parcel.writeInt(id_treballador);
        parcel.writeString(estat_error);
        parcel.writeString(tipus_error);
        parcel.writeString(descripcio_error);
    }
}
