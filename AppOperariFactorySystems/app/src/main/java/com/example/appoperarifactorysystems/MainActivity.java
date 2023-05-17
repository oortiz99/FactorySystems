package com.example.appoperarifactorysystems;

import static modelo.Errores.gettipusErrors;
import static modelo.Maquina.getMaquinas;

import android.os.Bundle;
import android.view.View;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Spinner;

import androidx.appcompat.app.AppCompatActivity;

import org.json.JSONException;
import org.json.JSONObject;

import java.io.IOException;
import java.util.ArrayList;
import java.util.List;
import java.util.concurrent.TimeUnit;

import modelo.Errores;
import modelo.Maquina;
import okhttp3.Call;
import okhttp3.Callback;
import okhttp3.FormBody;
import okhttp3.HttpUrl;
import okhttp3.MediaType;
import okhttp3.OkHttpClient;
import okhttp3.Request;
import okhttp3.RequestBody;
import okhttp3.Response;
import okhttp3.logging.HttpLoggingInterceptor;

public class MainActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        List<Maquina> listaMaquinas = new ArrayList<>();
        Spinner spinnerMaquinas = findViewById(R.id.maquina_label);
        Button buttonenviar =  findViewById(R.id.enviar_button);
        listaMaquinas =  getMaquinas();
        ArrayAdapter<Maquina> adapter = new ArrayAdapter<>(this, android.R.layout.simple_spinner_item, listaMaquinas);
        adapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        List<Errores> listaerrores =  new ArrayList<>();
        Spinner spinnererrores =  findViewById(R.id.tipus_error_input);
        listaerrores = gettipusErrors();
        ArrayAdapter<Errores> Erroradapter = new ArrayAdapter<>(this, android.R.layout.simple_spinner_item, listaerrores);
        Erroradapter.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        spinnererrores.setAdapter(Erroradapter);
        spinnerMaquinas.setAdapter(adapter);

        EditText descripciotext = findViewById(R.id.descripcio_error_input);

        buttonenviar.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Maquina maquinaSeleccionada = (Maquina) spinnerMaquinas.getSelectedItem();
                Errores erroresSeleccionado = (Errores) spinnererrores.getSelectedItem();

                if (maquinaSeleccionada != null && erroresSeleccionado != null) {
                    int maquinaId = maquinaSeleccionada.getId_maquina();
                    int treballadorId = 4; // Reemplaza con el ID de trabajador correcto
                    int maquinaId2 = 6;
                   // Reemplaza con la descripción del error correcta
                    String tipusError = erroresSeleccionado.toString();
                  ;
                    reportarError(maquinaId2, treballadorId, "Pendent", descripciotext.getText().toString(), tipusError);
                }
            }
        });



    }




    private void reportarError(int maquina, int treballador, String estatError, String descripcio, String tipus) {
        OkHttpClient client = new OkHttpClient();

        // Construir la URL con los parámetros
        // Creamos un interceptor y le indicamos el log level a usar
        final HttpLoggingInterceptor logging = new HttpLoggingInterceptor();
        logging.setLevel(HttpLoggingInterceptor.Level.BODY);

        // Asociamos el interceptor a las peticiones
        final OkHttpClient.Builder httpClient = new OkHttpClient.Builder();
        httpClient.connectTimeout(60, TimeUnit.SECONDS);
        httpClient.addInterceptor(logging);
        HttpUrl.Builder urlBuilder = HttpUrl.parse("http://10.2.7.89/FactorySystems/public/api/reportarError").newBuilder();
        urlBuilder.addQueryParameter("maquina", String.valueOf(maquina));
        urlBuilder.addQueryParameter("treballador", String.valueOf(treballador));
        urlBuilder.addQueryParameter("estat_error", estatError);
        urlBuilder.addQueryParameter("descripcio", descripcio);
        urlBuilder.addQueryParameter("tipus", tipus);
        String url = urlBuilder.build().toString();

        // Crear la solicitud POST
        RequestBody requestBody = new FormBody.Builder()
                .add("maquina", String.valueOf(maquina))
                .add("treballador", String.valueOf(treballador))
                .add("estat_error", estatError)
                .add("descripcio", descripcio)
                .add("tipus", tipus)
                .build();

        Request request = new Request.Builder()
                .url(url)
                .addHeader("Accept", "application/json")
                .post(requestBody)
                .build();

        // Enviar la solicitud
        client.newCall(request).enqueue(new Callback() {
            @Override
            public void onFailure(Call call, IOException e) {
                e.printStackTrace();
                // Manejar el error de la solicitud
            }

            @Override
            public void onResponse(Call call, Response response) throws IOException {
                if (response.isSuccessful()) {
                    // La solicitud se envió correctamente
                    // Puedes realizar acciones después de enviar la solicitud exitosamente
                } else {
                    // Error en la solicitud
                    // Puedes manejar el error de acuerdo a tus necesidades
                }
                response.close();
            }
        });
    }

}