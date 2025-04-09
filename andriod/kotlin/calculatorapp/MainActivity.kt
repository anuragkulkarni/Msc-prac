package com.example.calculatorapp

import android.os.Bundle
import android.view.View
import android.widget.Button
import android.widget.TextView
import androidx.appcompat.app.AppCompatActivity
class MainActivity : AppCompatActivity() {
    private lateinit var resultText: TextView
    private var currentInput = ""
    private var operator = ""
    private var firstOperand = 0.0
    private var secondOperand = 0.0
    override fun onCreate(savedInstanceState: Bundle?) {
        supportActionBar?.hide()
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
        resultText = findViewById(R.id.resultText)
        val button1: Button = findViewById(R.id.button1)
        val button2: Button = findViewById(R.id.button2)
        val button3: Button = findViewById(R.id.button3)
        val button4: Button = findViewById(R.id.button4)
        val button5: Button = findViewById(R.id.button5)
        val button6: Button = findViewById(R.id.button6)
        val button7: Button = findViewById(R.id.button7)
        val button8: Button = findViewById(R.id.button8)
        val button9: Button = findViewById(R.id.button9)
        val button0: Button = findViewById(R.id.button0)
        val buttonAdd: Button = findViewById(R.id.buttonAdd)
        val buttonSubtract: Button = findViewById(R.id.buttonSubtract)
        val buttonMultiply: Button = findViewById(R.id.buttonMultiply)
        val buttonDivide: Button = findViewById(R.id.buttonDivide)
        val buttonClear: Button = findViewById(R.id.buttonClear)
        val buttonEquals: Button = findViewById(R.id.buttonEquals)
        // Number buttons click listeners
        val numberButtons = listOf(button1, button2, button3, button4,
            button5, button6, button7, button8, button9, button0)
        for (button in numberButtons) {
            button.setOnClickListener { onNumberClick(it) }
        }
        // Operation buttons click listeners
        buttonAdd.setOnClickListener { onOperatorClick("+") }
        buttonSubtract.setOnClickListener { onOperatorClick("-") }
        buttonMultiply.setOnClickListener { onOperatorClick("*") }
        buttonDivide.setOnClickListener { onOperatorClick("/") }
        buttonClear.setOnClickListener { onClearClick() }
        buttonEquals.setOnClickListener { onEqualsClick() }
    }
    private fun onNumberClick(view: View) {
        val button = view as Button
        currentInput += button.text.toString()
        resultText.text = currentInput
    }
    private fun onOperatorClick(op: String) {
        if (currentInput.isNotEmpty()) {
            firstOperand = currentInput.toDouble()
            operator = op
            currentInput = ""
        }
    }
    private fun onClearClick() {
        currentInput = ""
        firstOperand = 0.0
        secondOperand = 0.0
        operator = ""
        resultText.text = "0"
    }
    private fun onEqualsClick() {
        if (currentInput.isNotEmpty() && operator.isNotEmpty()) {
            secondOperand = currentInput.toDouble()
            val result = when (operator) {
                "+" -> firstOperand + secondOperand
                "-" -> firstOperand - secondOperand
                "*" -> firstOperand * secondOperand
                "/" -> if (secondOperand != 0.0) firstOperand /
                        secondOperand else {
                    resultText.text = "Error"
                    return
                }
                else -> 0.0
            }
            resultText.text = result.toString()
            currentInput = result.toString()
        }
    }
}