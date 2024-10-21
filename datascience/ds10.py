import pandas as pd
import matplotlib.pyplot as plt

# Read the CSV file
df = pd.read_csv('product_sales_data.csv')

# Plotting a bar chart for Face Cream and Face Wash sales
plt.bar(df['Month'], df['Face_Cream_Sales'], width=0.4, label='Face Cream Sales', align='center')
plt.bar(df['Month'], df['Face_Wash_Sales'], width=0.4, label='Face Wash Sales', align='edge')

# Add labels and title
plt.xlabel('Month')
plt.ylabel('Sales')
plt.title('Face Cream and Face Wash Sales by Month')

# Add legend
plt.legend()

# Rotate x labels for better readability
plt.xticks(rotation=45)

# Show the plot
plt.tight_layout()
plt.show()
