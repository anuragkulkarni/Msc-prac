import numpy as np
import matplotlib.pyplot as plt

def plot_normal_curve(mean, std_dev, num_points=1000):
    # Step 1: Generate x values
    x = np.linspace(mean - 4*std_dev, mean + 4*std_dev, num_points)
    
    # Step 2: Calculate the normal distribution (PDF)
    pdf = (1 / (std_dev * np.sqrt(2 * np.pi))) * np.exp(-0.5 * ((x - mean) / std_dev) ** 2)
    
    # Step 3: Plot the normal curve
    plt.figure(figsize=(10, 6))
    plt.plot(x, pdf, color='blue', label='Normal Distribution Curve')
    plt.title('Normal Distribution Curve')
    plt.xlabel('X-axis')
    plt.ylabel('Probability Density Function (PDF)')
    plt.axvline(mean, color='red', linestyle='--', label='Mean')
    plt.legend()
    plt.grid()
    plt.show()

# Example usage
mean = 0       # Mean of the distribution
std_dev = 1    # Standard deviation of the distribution
plot_normal_curve(mean, std_dev)
