n, k = map(int, input().split())
l = list(map(int, input().split()))
v=0
for i, c in enumerate(l):
	if c>0 and c>=l[k-1]:
		v=i+1
			
print(v)	
