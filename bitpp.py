import sys
s = sys.stdin.read()
print(s.count('++')-s.count('--'))
