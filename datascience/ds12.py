import pandas as pd
import matplotlib.pyplot as plt

# Step 1: Read the CSV file (make sure the file path is correct)
df = pd.read_csv('product_sales_data.csv')

# Step 2: Calculate total sales for each product over the entire year
total_face_cream_sales = df['Face_Cream_Sales'].sum()
total_face_wash_sales = df['Face_Wash_Sales'].sum()
total_toothpaste_sales = df['Toothpaste_Sales'].sum()
total_shampoo_sales = df['Shampoo_Sales'].sum()
total_bathing_soap_sales = df['Bathing_Soap_Sales'].sum()
total_moisturizer_sales = df['Moisturizer_Sales'].sum()

# Step 3: Store sales data and labels for the pie chart
sales = [total_face_cream_sales, total_face_wash_sales, total_toothpaste_sales, 
         total_shampoo_sales, total_bathing_soap_sales, total_moisturizer_sales]
products = ['Face Cream', 'Face Wash', 'Toothpaste', 'Shampoo', 'Bathing Soap', 'Moisturizer']

# Step 4: Plotting the Pie Chart
plt.figure(figsize=(8,6))
plt.pie(sales, labels=products, autopct='%1.1f%%', startangle=90, colors=['#ff9999','#66b3ff','#99ff99','#ffcc99', '#c2c2f0', '#ffb3e6'])

# Equal aspect ratio ensures that pie is drawn as a circle
plt.axis('equal')
plt.title('Total Sales Data for Last Year (by Product)')
# Step 5: Display the Pie Chart
plt.show()
