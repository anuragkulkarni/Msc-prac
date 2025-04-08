package com.example.factorial

import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.TextView
import androidx.appcompat.app.AppCompatActivity

class MainActivity : AppCompatActivity() {

    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)

        // Get references to UI elements
        val numberInput: EditText = findViewById(R.id.numberInput)
        val calculateButton: Button = findViewById(R.id.calculateButton)
        val resultText: TextView = findViewById(R.id.resultText)

        // Set click listener on the calculate button
        calculateButton.setOnClickListener {
            val input = numberInput.text.toString()

            // Check if the input is not empty
            if (input.isNotEmpty()) {
                val number = input.toInt()
                val factorialResult = factorial(number)
                resultText.text = "Factorial: $factorialResult"
            } else {
                resultText.text = "Please enter a number!"
            }
        }
    }

    // Function to calculate factorial
    private fun factorial(n: Int): Long {
        return if (n == 0) 1 else n * factorial(n - 1)
    }
}
