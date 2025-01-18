def ayush_hi(k):
    if(k>0):
        result = k * ayush_hi(k - 1)
        print(result)
    else:
        result=1
    return result
print("the factorials are :")
ayush_hi(5)
    