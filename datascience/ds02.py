import pandas as pd

def compute_summary_statistics(data):
    # Convert data to a Pandas Series
    data_series = pd.Series(data)
    # Standard Deviation
    std_dev = data_series.std()
    # Variance
    variance_value = data_series.var()
    # Print the summary statistics
    print(f"Standard Deviation: {std_dev}")
    print(f"Variance: {variance_value}")

# Example data
data = [11, 20, 2, 3, 40, 50, 60, 60, 7, 8]

# Compute summary statistics using Pandas
compute_summary_statistics(data)
