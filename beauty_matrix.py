l = [2,1,0,1,2]
for i in l:
s = input()
if '1' in s:
	print(i+l[s.find('1')//2])
