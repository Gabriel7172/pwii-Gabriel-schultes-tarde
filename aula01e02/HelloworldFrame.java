/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package com.mycompany.swingop;

import javax.swing. *;
/**
 *
 * @author Aluno CA
 */
public class HelloworldFrame extends JFrame {
    
    public HelloworldFrame() {
        
        super("SwingOP");
        final JLabel label = new JLabel ("Hello worlddddd");
        getContentPane().add(label);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        pack();
        setVisible(true); 
    }
    public static void main (String[]args){
    HelloworldFrame frame = new HelloworldFrame();
   
    }
}
