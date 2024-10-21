import numpy as np
import matplotlib.pyplot as plt

def calculate_correlation(x, y):
    """Calculate the correlation coefficient between two arrays."""
    correlation_coefficient = np.corrcoef(x, y)[0, 1]
    return correlation_coefficient

def plot_scatter(x, y, correlation):
    """Create a scatter plot of the data and display the correlation."""
    plt.figure(figsize=(8, 6))
    plt.scatter(x, y, color='blue', alpha=0.7)
    plt.title(f'Scatter Plot (Correlation: {correlation:.2f})')
    plt.xlabel('X-axis')
    plt.ylabel('Y-axis')
    plt.axhline(0, color='gray', linewidth=0.8, linestyle='--')
    plt.axvline(0, color='gray', linewidth=0.8, linestyle='--')
    plt.grid()
    plt.show()

# Example data
np.random.seed(42)  # For reproducibility
x = np.random.rand(100) * 10  # Generate random data for X
y = 2.5 * x + np.random.randn(100)  # Generate Y as a function of X with some noise

# Calculate correlation
correlation = calculate_correlation(x, y)

# Plot the scatter plot
plot_scatter(x, y, correlation)
