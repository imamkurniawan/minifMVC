
# coding: utf-8


import sys, random, matplotlib.pyplot as plt

destination_dir = str(sys.argv[1])
# li1 = [4,8,6,2,3,2,1,2,3,4,3,2,5,6,7,23,22,21,20,25,28,26,29,12,5,21,21,33,43,43,54,65,76]
li1 = random.sample(range(5000), 12)   
max_li1 = float(max(li1))

def sorting_asc(li):
    lsort = []
    for i in li:
        lsort.append(i)
    lsort.sort()
    return lsort

def mean(li):
    return sum(li)/float(len(li))
    
def main(z):   
    max_li2 = 0.0
    li1_sort = []
    
    print "list 1 = ",li1, "<br>"
        
    if z > max_li1:
        max_li2 = z
    else:
        max_li2 = max_li1
    print "Max = ",max_li2
    
    means = 0
    means = mean(li1)
    print "Mean list 1 = ",means
    
    li1_sort = sorting_asc(li1)
    
    fig = plt.figure()
    plt.plot(li1)
    # plt.plot(li1_sort)
    plt.title("Value for something 2010 - 2015")
    plt.ylabel('Value')
    # plt.show()
    
    fig.savefig(destination_dir + "/figure1.png")

    
if (__name__ == "__main__"):
    main(23)




