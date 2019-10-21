mylist=[]
while True:
    try:
        num = raw_input("Enter a number: [Leave blank to continue]")
        if num == "" : break
        num = int(num)
    except:
        print "Invalid input"
        continue
    mylist.append(num)
if len(mylist) > 0:
    sorted_list = sorted(mylist)
    max = sorted_list[len(sorted_list) - 1]
    min = sorted_list[0]
    print "Maximum is", max
    print "Minimum is", min