def ayush_hi(k):
    if(k > 0):
        result = k + ayush_hi(k - 1)
        print(result)
    else:
        result=0
    return result
print("This is a perfect examples of recursion :")
ayush_hi(2)