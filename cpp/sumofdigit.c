#include<stdio.h>

int main ()
{
    int num, sum = 0;
 
    num = 1234;
    printf("Enter the number\n");
    scanf("%d",&num);


    while(num!=0){
        sum += num % 10;
        num = num / 10;
    }
 
    
    printf("Sum: %d\n",sum);
 
    return 0;
}