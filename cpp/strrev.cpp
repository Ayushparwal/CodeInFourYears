#include<stdio.h>
#include<string.h>

int main(){
	char a[20];
	printf("Enter the string :");
	scanf("%s",a);
	strupr(a);
	printf("%s",a);
	return 0;
}

