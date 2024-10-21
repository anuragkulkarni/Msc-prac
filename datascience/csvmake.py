import pandas as pd

# Data for the CSV file
# data = {
#     'Month': ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
#     'Total_Profit': [25000, 27000, 30000, 35000, 37000, 40000, 42000, 45000, 47000, 50000, 52000, 55000],
#     'Face_Cream_Sales': [1500, 1600, 1700, 1800, 1900, 2000, 2100, 2200, 2300, 2400, 2500, 2600],
#     'Face_Wash_Sales': [1200, 1300, 1400, 1500, 1600, 1700, 1800, 1900, 2000, 2100, 2200, 2300],
#     'Toothpaste_Sales': [3000, 3200, 3300, 3500, 3600, 3700, 3800, 3900, 4000, 4100, 4200, 4300],
#     'Shampoo_Sales': [1500, 1400, 1600, 1700, 1800, 1900, 2000, 2100, 2200, 2300, 2400, 2500],
#     'Bathing_Soap_Sales': [2000, 2100, 2200, 2300, 2400, 2500, 2600, 2700, 2800, 2900, 3000, 3100],
#     'Moisturizer_Sales': [1000, 1100, 1200, 1300, 1400, 1500, 1600, 1700, 1800, 1900, 2000, 2100]
# }

# # Create a DataFrame
# df = pd.DataFrame(data)

# # Save DataFrame to CSV
# df.to_csv('product_sales_data.csv', index=False)
data=pd.read_csv('product_sales_data.csv')

print(data.columns)