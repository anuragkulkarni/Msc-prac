import pandas as pd
import seaborn as sns
import matplotlib.pyplot as plt

# Step 1: Load the Iris dataset
df = sns.load_dataset('iris')

# Step 2: Drop the 'species' column (non-numeric)
df_numeric = df.drop(columns=['species'])

# Step 3: Compute the correlation matrix for numerical columns
correlation_matrix = df_numeric.corr()

# Step 4: Create a heatmap using Seaborn
plt.figure(figsize=(8, 6))
sns.heatmap(correlation_matrix, annot=True, cmap='coolwarm', linewidths=0.5)

# Step 5: Set title and display the heatmap
plt.title('Correlation Heatmap of Iris Dataset Variables')
plt.show()
