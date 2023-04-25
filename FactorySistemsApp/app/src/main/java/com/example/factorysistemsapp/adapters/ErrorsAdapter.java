package com.example.factorysistemsapp.adapters;

import android.graphics.Color;
import android.graphics.drawable.Drawable;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.example.factorysistemsapp.R;
import com.example.factorysistemsapp.modelo.Errores;
import com.example.factorysistemsapp.modelo.Maquina;
import com.example.factorysistemsapp.modelo.Treballador;

import java.util.List;

public class ErrorsAdapter extends RecyclerView.Adapter<ErrorsAdapter.ViewHolder>{

    private List<Errores> errores;
    private List<Maquina> maquinas;
    private List<Treballador> treballadors;
    private ErrorSelectedListener mListener;
    private int mPosItemSeleccionado = -1;

    private String green = "#00FF00";
    private String red = "#FF0000";
    private String orange = "#FF8000";

    public ErrorsAdapter(List<Errores> err, List<Maquina> maq, List<Treballador> treb, ErrorSelectedListener listener){
        errores = err;
        maquinas = maq;
        treballadors = treb;
        mListener = listener;
    }

    public interface ErrorSelectedListener {
        public void onErrorSelected(Errores seleccionada);
    }

    @NonNull
    @Override
    public ErrorsAdapter.ViewHolder onCreateViewHolder(@NonNull ViewGroup parent, int viewType) {
        View fila = LayoutInflater.from(parent.getContext()).inflate(R.layout.error_fila, parent, false);
        ViewHolder vh = new ViewHolder(fila);

        fila.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                int pos = vh.getAdapterPosition();
                Errores e = errores.get(pos);

                if(mListener!=null) mListener.onErrorSelected(e);
            }
        });

        return vh;
    }

    @Override
    public void onBindViewHolder(@NonNull ErrorsAdapter.ViewHolder holder, int position) {
        Errores e = errores.get(position);

        for (Maquina m: maquinas){
            if(m.getId_maquina() == e.getId_maquina()){
                System.out.println("ID MAQUINA======" + m.getId_maquina());
                holder.maquinaName.setText(m.getNom_maquina());
            }
        }

        holder.errorStatus.setText(e.getEstat_error());

        if(e.getEstat_error().equals("Resolt")){
            Drawable filaBg = holder.f.getBackground();
            filaBg.setTint(Color.parseColor(green));
        }else if(e.getEstat_error().equals("En curs")){
            Drawable filaBg = holder.f.getBackground();
            filaBg.setTint(Color.parseColor(orange));
        }else{
            Drawable filaBg = holder.f.getBackground();
            filaBg.setTint(Color.parseColor(red));
        }

        holder.viewSelected.setVisibility(
                (position== mPosItemSeleccionado)?
                        View.VISIBLE:
                        View.INVISIBLE );
    }

    @Override
    public int getItemCount() {
        return errores.size();
    }

    public class ViewHolder extends RecyclerView.ViewHolder {
        androidx.constraintlayout.widget.ConstraintLayout f;
        TextView maquinaName;
        TextView errorStatus;
        View viewSelected;

        public ViewHolder(@NonNull View fila){
            super(fila);
            f = fila.findViewById(R.id.errorFila);
            maquinaName = fila.findViewById(R.id.txvMaquina);
            errorStatus = fila.findViewById(R.id.txvErrorStatus);
            viewSelected = fila.findViewById(R.id.viewSelected);
        }
    }
}
