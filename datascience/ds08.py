import matplotlib.pyplot as plt
import pandas as pd

# read csv sales data for six products over 12 months
data=pd.read_csv('product_sales_data.csv')


def plot_product_sales(df):
    """Plot product sales data using a multiline plot."""
    plt.figure(figsize=(12, 6))
    
    for product in df.columns[2:]:  # Skip the 'Month' and 'Total_Profit'  column
        plt.plot(df['Month'], df[product], marker='o', linestyle='-', linewidth=2, label=product)

    plt.title('Product Sales Data Over 12 Months')
    plt.xlabel('Months')
    plt.ylabel('Sales')
    plt.xticks(df['Month'])  # Set x-ticks to the month names
    plt.legend()  # Show legend
    plt.grid()
    plt.tight_layout()
    plt.show()

# # Call the function to plot the sales data
plot_product_sales(data)
