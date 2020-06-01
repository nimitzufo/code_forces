for i in [0]*int(input()):
	s=input()
	l=len(s)-2
	if l<8:
		print(s)
	else:
		print(s[0]+str(l)+s[l+1])
