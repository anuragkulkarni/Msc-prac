import numpy as np

def calculate_variance(data):
    # Convert data to a NumPy array for easy calculations
    data_array = np.array(data)
    
    # Calculate the mean of the data
    mean = np.mean(data_array)
    
    # Calculate the variance
    variance = np.mean((data_array - mean) ** 2)
    
    return variance

# Example usage
data = [10, 20, 30, 40, 50]
variance_result = calculate_variance(data)
print(f"Variance of the given data: {variance_result:.2f}")
