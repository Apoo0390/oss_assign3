# oss_assign3


I trained using learning.py from "https://github.com/llSourcell/antivirus_demo" and tried malicious detection of pe files.

When learning whether the file is malcious, 
I used 0.exe:  http://www.tekdefense.com/downloads/malware-samples/

When learning whether the file is legitimate, 
I used notepad.exe

## run learning.py 

```
apoo@ubuntu:~/Desktop/opensource/antivirus_demo-master$ sudo python learning.py
Researching important feature based on 54 total features

/usr/local/lib/python2.7/dist-packages/sklearn/ensemble/forest.py:246: FutureWarning: The default value of n_estimators will change from 10 in version 0.20 to 100 in 0.22.
  "10 in version 0.20 to 100 in 0.22.", FutureWarning)
11 features identified as important:
1. feature Characteristics (0.151784)
2. feature MajorSubsystemVersion (0.122819)
3. feature DllCharacteristics (0.110575)
4. feature VersionInformationSize (0.109256)
5. feature Machine (0.098551)
6. feature ResourcesMaxEntropy (0.062880)
7. feature ImageBase (0.044585)
8. feature Subsystem (0.038822)
9. feature SectionsMinEntropy (0.035963)
10. feature SectionsMaxEntropy (0.032510)
11. feature ResourcesMinEntropy (0.026761)

Now testing algorithms
GNB : 70.191959 %
DecisionTree : 98.942412 %
RandomForest : 99.322709 %
AdaBoost : 98.536762 %
GradientBoosting : 98.757696 %

Winner algorithm is RandomForest with a 99.322709 % success
Saving algorithm and feature list in classifier directory...
Saved
False positive rate : 0.562465 %
False negative rate : 0.947637 %

```

## Run checkpe.py

```
apoo@ubuntu:~/Desktop/opensource/antivirus_demo-master$ sudo python checkpe.py 0.exe
The file 0.exe is malicious
```

```

apoo@ubuntu:~/Desktop/opensource/antivirus_demo-master$ sudo python checkpe.py notepad.exe
The file notepad.exe is legitimate

```
