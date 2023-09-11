countryname = []
countrycode = []

def  read_csv(x):
     with open(x,"r") as data_csv:
        lines = data_csv.readlines()
        return lines

def parse_csv(new_list):
    for i in new_list:
        new_list = i.split(",")
        countryname.append(new_list[0])
        countrycode.append(new_list[1])


def print_csv(i):
    for i in range(len(countryname)):
        print("----------")
        print(countryname[i])
        print(countrycode[i])

x = read_csv("data.csv")

parse_csv(x)

print_csv(x)


