import pandas as pd

def compute_summary_statistics(data):
    # Convert data to pandas Series for easy statistical computations
    data_series = pd.Series(data)

    # Compute mean using numpy
    mean = data_series.mean()
    
    # Compute median using pandas
    median = data_series.median()
    
    # Compute mode using pandas
    mode = data_series.mode()

    # Display the results
    print(f"Mean: {mean}")
    print(f"Median: {median}")
    
    if len(mode) == 1:
        print(f"Mode: {mode[0]}")
    else:
        print(f"Modes: {list(mode)}")

# Example usage:
data = [10, 20, 2, 30, 40, 5, 50, 5, 60]
compute_summary_statistics(data)
