import matplotlib.pyplot as plt
import numpy as np
np.random.seed(10)
data = [np.random.normal(0, std, 100) for std in range(1, 4)]
# Create a box plot
plt.boxplot(data, vert=True, patch_artist=True,
boxprops=dict(facecolor='skyblue'),
medianprops=dict(color='red'))
plt.xlabel('Data Set')
plt.ylabel('Values')
plt.title('Example of Box Plot')
plt.show()
