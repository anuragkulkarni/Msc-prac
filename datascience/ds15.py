import matplotlib.pyplot as plt
from pywaffle import Waffle

# Example data: Mobile companies and their stock data (in percentage)
data = {
    'Apple': 35,
    'Samsung': 25,
    'Xiaomi': 15,
    'Huawei': 10,
    'OnePlus': 5,
    'Others': 10
}

# Step 1: Set up the waffle chart figure
fig = plt.figure(
    FigureClass=Waffle, 
    rows=10,  # Number of rows for the waffle chart
    values=data,  # Data to display
    colors=["#FF9999", "#66B2FF", "#99FF99", "#FFCC99", "#C2C2F0", "#FFB3E6"],  # Colors for each section
    title={'label': 'Mobile Company Stock Data', 'loc': 'center', 'fontsize': 18},  # Chart title
    labels=[f"{k} ({v}%)" for k, v in data.items()],  # Label each segment with the company and percentage
    legend={'loc': 'upper left', 'bbox_to_anchor': (1, 1)}  # Add a legend
)

# Step 2: Show the chart
plt.show()
