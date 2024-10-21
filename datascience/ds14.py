import seaborn as sns
import matplotlib.pyplot as plt
# Step 1: Load the Iris dataset
df = sns.load_dataset('iris')
# Step 2: Create a box plot for each numerical feature across the species
plt.figure(figsize=(12, 8))
# Plotting the boxplot
sns.boxplot(x='species', y='sepal_length', data=df)
plt.title('Box Plot of Sepal Length Across Iris Species')
plt.show()
# Boxplot for other features (optional)
plt.figure(figsize=(12, 8))
sns.boxplot(x='species', y='sepal_width', data=df)
plt.title('Box Plot of Sepal Width Across Iris Species')
plt.show()
plt.figure(figsize=(12, 8))
sns.boxplot(x='species', y='petal_length', data=df)
plt.title('Box Plot of Petal Length Across Iris Species')
plt.show()
plt.figure(figsize=(12, 8))
sns.boxplot(x='species', y='petal_width', data=df)
plt.title('Box Plot of Petal Width Across Iris Species')
plt.show()
