import numpy as np
import matplotlib.pyplot as plt

# Step 1: Generate some example data
np.random.seed(42)

# Random data (Linear relationship with some noise)
X = 2 * np.random.rand(100)  # Independent variable
y = 4 + 3 * X + np.random.randn(100)  # Dependent variable with noise

# Step 2: Compute the slope (m) and intercept (b) using the least-squares method
n = len(X)
x_mean = np.mean(X)
y_mean = np.mean(y)

# Compute slope (m) and intercept (b)
numerator = np.sum(X * (y - y_mean))
denominator = np.sum(X * (X - x_mean))
m = numerator / denominator
b = y_mean - m * x_mean

# Predicted y values based on the regression line
y_pred = m * X + b

# Step 3: Calculate residuals (difference between actual and predicted values)
residuals = y - y_pred

# Step 4: Plot the original data and regression line
plt.figure(figsize=(10, 5))

# Scatter plot of original data
plt.subplot(1, 2, 1)
plt.scatter(X, y, color='blue', label='Data Points')
plt.plot(X, y_pred, color='red', label='Regression Line')
plt.xlabel('X')
plt.ylabel('y')
plt.title('Regression Line')
plt.legend()

# Step 5: Plot residuals
plt.subplot(1, 2, 2)
plt.scatter(X, residuals, color='green', label='Residuals')
plt.axhline(y=0, color='red', linestyle='--')  # Horizontal line at 0
plt.xlabel('X')
plt.ylabel('Residuals')
plt.title('Residual Plot')
plt.legend()

plt.tight_layout()
plt.show()

# Step 6: Display the slope, intercept, and Mean Squared Error (MSE)
mse = np.mean(residuals**2)  # Mean squared error
print(f"Slope (m): {m:.3f}")
print(f"Intercept (b): {b:.3f}")
print(f"Mean Squared Error (MSE): {mse:.3f}")
