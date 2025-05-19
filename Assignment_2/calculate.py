import sys
import math

b= float (sys.argv[1])
c= float (sys.argv[2])
a= float (sys.argv[3])

c_cube= c**3
sqrt=math.sqrt(c_cube)
div = sqrt / a
mult = div * 10
final_result = b + mult
print(f"the result of the equation is: {final_result}")

print(f"step 1: c= {c} , c**3={c_cube}") 
print(f"step 2: sqrt(c**3) = {sqrt}")
print(f"step 3: c= {c} / a= {a} = {div}") 
print(f"step 4: {(sqrt(c**3)/a)} * 10 = {mult}")
print(f"step 5: {b} + {mult}  = {final_result}")
