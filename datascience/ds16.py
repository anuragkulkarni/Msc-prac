import matplotlib.pyplot as plt
import numpy as np
np.random.seed(0)
data = np.random.rand(10, 10)
# Create a heatmap
plt.imshow(data, cmap='viridis', interpolation='nearest')
# Add a color bar to show the scale
plt.colorbar()
plt.xlabel('X-axis Label')
plt.ylabel('Y-axis Label')
plt.title('Example of Heatmap')
plt.show()
