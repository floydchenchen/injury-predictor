import pandas as pd


#df = pd.read_csv("data_set.csv")
import re
fr = open("data_set.csv", "r")
fw = open("new_set.csv", "w")
str = fr.read()
str = re.sub("#NULL!", "", str)

fw.write(str)
fr.close()
fw.close()       
