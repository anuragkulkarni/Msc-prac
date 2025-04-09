package com.example.studentapp

import android.os.Bundle
import android.view.View
import android.widget.Button
import android.widget.EditText
import android.widget.TextView
import androidx.appcompat.app.AppCompatActivity
class MainActivity : AppCompatActivity() {
    override fun onCreate(savedInstanceState: Bundle?) {
        supportActionBar?.hide() // hides the top title bar
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
// Initialize the UI elements
        val studentNameEditText: EditText = findViewById(R.id.studentName)
        val contactNumberEditText: EditText =
            findViewById(R.id.contactNumber)
        val cityEditText: EditText = findViewById(R.id.city)
        val submitButton: Button = findViewById(R.id.submitButton)
        val displayInfoTextView: TextView = findViewById(R.id.displayInfo)
// Set click listener for the submit button
        submitButton.setOnClickListener {
// Get the input values
            val studentName = studentNameEditText.text.toString()
            val contactNumber = contactNumberEditText.text.toString()
            val city = cityEditText.text.toString()
// Check if all fields are filled
            if (studentName.isNotEmpty() && contactNumber.isNotEmpty() &&
                city.isNotEmpty()) {
// Display the student information
                val studentInfo = "Student Name: $studentName\n" +
                        "Contact Number: $contactNumber\n" +
                        "City: $city"
                displayInfoTextView.text = studentInfo
            } else {
// Display an error message if any field is empty
                displayInfoTextView.text = "Please fill all fields!"
            }
        }
    }}