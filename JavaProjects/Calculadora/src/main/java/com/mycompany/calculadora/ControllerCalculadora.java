/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.calculadora;

/**
 *
 * @author pato
 */
public class ControllerCalculadora {
    
    
    private ModelCalculadora modellCalculadora;
    private  ViewCalculadora viewCalculadora;

    public ControllerCalculadora(ModelCalculadora modellCalculadora, ViewCalculadora viewCalculadora) {
        this.modellCalculadora = modellCalculadora;
        this.viewCalculadora = viewCalculadora;
    }
    
    public void realizarSuma(){
        int num1=viewCalculadora.getNum1();
        int num2=viewCalculadora.getNum2();
        
        int resultado = modellCalculadora.sumar(num1, num2);
        
        viewCalculadora.setResultado(resultado);
    
    }
    
    
    public void realizarResta(){
        int num1=viewCalculadora.getNum1();
        int num2=viewCalculadora.getNum2();
        
        int resultado = modellCalculadora.restar(num1, num2);
        
        viewCalculadora.setResultado(resultado);
    
    }
    
    
    
    
    
    
}
