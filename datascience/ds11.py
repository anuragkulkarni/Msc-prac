import pandas as pd
import matplotlib.pyplot as plt


# Create DataFrame
df = pd.read_csv('product_sales_data.csv')

# Plotting the histogram for Total Profit
plt.figure(figsize=(8, 6))
plt.hist(df['Total_Profit'], bins=5, color='gray', edgecolor='black')

# Adding titles and labels
plt.title('Histogram of Total Profit for Each Month')
plt.xlabel('Profit')
plt.ylabel('Frequency')

# Display the histogram
plt.show()
