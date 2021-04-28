package com.maherdev;

import java.net.MalformedURLException;
import java.net.URL;

public class Api {
    private final URL base_url = new URL("https://www.maherdev.epizy.com");

    public Api() throws MalformedURLException {
    }

    public URL getBaseUrl(){
        return this.base_url;
    }

    public void test(){
        System.out.print("this is smart city : \n");
        System.out.print(getBaseUrl());
    }
}
