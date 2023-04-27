package com.example.factorysistemsoperari;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import java.util.ArrayList;
import java.util.List;

import modelo.Treballador;

public class MainActivity extends AppCompatActivity {
    private EditText etUsuario, etPassword;
    private Button btnLogin;
    private List<Treballador> listaTrabajadores =  new ArrayList<>();
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        etUsuario = findViewById(R.id.et_usuario);
        etPassword = findViewById(R.id.et_password);
        btnLogin = findViewById(R.id.btn_login);
        listaTrabajadores =  Treballador.getTreballadors();

        btnLogin.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                // Obtener usuario y contraseña ingresados por el usuario
                String usuario = etUsuario.getText().toString();
                String password = etPassword.getText().toString();

                // Buscar si el usuario y contraseña existen en la lista de trabajadores
                boolean encontrado = false;
                for (Treballador t : listaTrabajadores) {
                    if (t.getLogin().equals(usuario) && t.getPassword().equals(password)) {
                        encontrado = true;
                        break;
                    }
                }

                // Mostrar mensaje según si el usuario y contraseña fueron encontrados o no
                if (encontrado) {
                    Toast.makeText(MainActivity.this, "Login correcto", Toast.LENGTH_SHORT).show();

                } else {
                    Toast.makeText(MainActivity.this, "Usuario o contraseña incorrectos", Toast.LENGTH_SHORT).show();
                }
            }
        });
    }
}