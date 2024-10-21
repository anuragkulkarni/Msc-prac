import matplotlib.pyplot as plt
import pandas as pd

# Read csv file 

df = pd.read_csv('product_sales_data.csv')

def plot_toothpaste_sales(df):
    """Plot toothpaste sales data using a scatter plot."""
    plt.figure(figsize=(10, 6))

    # Create a scatter plot
    plt.scatter(df['Month'], df['Toothpaste_Sales'], color='blue', marker='o', s=100, label='Sales')

    # Labeling and titling
    plt.title('Toothpaste Sales Data Over 12 Months')
    plt.xlabel('Month')
    plt.ylabel('Sales')
    
    # Display grid and show plot
    plt.grid(True)
    plt.legend()
    plt.tight_layout()
    plt.show()

# Call the function to display the scatter plot
plot_toothpaste_sales(df)
