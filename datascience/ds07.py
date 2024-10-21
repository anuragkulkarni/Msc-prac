import numpy as np
import matplotlib.pyplot as plt
import pandas as pd

# Read data of total profit for each month (January to December)
data=pd.read_csv('product_sales_data.csv')
months=data['Month'].tolist()
profits=data['Total_Profit'].tolist()


def plot_monthly_profit(months, profits):
    """Plot the monthly profit using a line plot."""
    plt.figure(figsize=(10, 6))
    plt.plot(months, profits, marker='o', color='blue', linestyle='-', linewidth=2, markersize=8)
    plt.title('Total Monthly Profit')
    plt.xlabel('Months')
    plt.ylabel('Profit in USD')
    plt.xticks(months)  # Set x-ticks to the month names
    plt.grid()
    plt.ylim(0, max(profits) + 5000)  # Set y-limit for better visibility
    plt.show()

# Call the function to plot the profits
plot_monthly_profit(months, profits)
