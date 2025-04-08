package com.example.myapplication

import android.os.Bundle
import android.widget.Button
import android.widget.EditText
import android.widget.TextView
import androidx.appcompat.app.AppCompatActivity

class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        supportActionBar?.hide()  // hides that purple title bar
        setContentView(R.layout.activity_main)

        val editTextNumber1: EditText = findViewById(R.id.editTextNumber1)
        val editTextNumber2: EditText = findViewById(R.id.editTextNumber2)
        val textViewResult: TextView = findViewById(R.id.textViewResult)
        val buttonAdd: Button = findViewById(R.id.buttonAdd)
        val buttonSub: Button = findViewById(R.id.buttonSub)
        val buttonMul: Button = findViewById(R.id.buttonMul)
        val buttonDiv: Button = findViewById(R.id.buttonDiv)

        buttonAdd.setOnClickListener {
            val num1 = editTextNumber1.text.toString().toDoubleOrNull()
            val num2 = editTextNumber2.text.toString().toDoubleOrNull()
            textViewResult.text = if (num1 != null && num2 != null) {
                "Result: ${num1 + num2}"
            } else {
                "Please enter valid numbers"
            }
        }

        buttonSub.setOnClickListener {
            val num1 = editTextNumber1.text.toString().toDoubleOrNull()
            val num2 = editTextNumber2.text.toString().toDoubleOrNull()
            textViewResult.text = if (num1 != null && num2 != null) {
                "Result: ${num1 - num2}"
            } else {
                "Please enter valid numbers"
            }
        }

        buttonMul.setOnClickListener {
            val num1 = editTextNumber1.text.toString().toDoubleOrNull()
            val num2 = editTextNumber2.text.toString().toDoubleOrNull()
            textViewResult.text = if (num1 != null && num2 != null) {
                "Result: ${num1 * num2}"
            } else {
                "Please enter valid numbers"
            }
        }

        buttonDiv.setOnClickListener {
            val num1 = editTextNumber1.text.toString().toDoubleOrNull()
            val num2 = editTextNumber2.text.toString().toDoubleOrNull()
            textViewResult.text = when {
                num1 != null && num2 != null && num2 != 0.0 -> "Result: ${num1 / num2}"
                num2 == 0.0 -> "Cannot divide by zero"
                else -> "Please enter valid numbers"
            }
        }
    } // ✅ This was missing!
}
