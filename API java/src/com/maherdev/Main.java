package com.maherdev;

import java.io.IOException;

public class Main {

    public static void main(String[] args){
        String email = "user@live.com";
        String password = "password";

        Client client = new Client();

        int response = client.logIN(email,password);

        if (response == 3){
            System.out.println("correct --> login valide");
        }else if (response == 2){
            System.out.println("incorrect password");
        }else{
            System.out.println("incorrect email");
        }
    }
}
