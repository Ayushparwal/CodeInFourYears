#include<stdio.h>
#include<string.h>

int main(){
	char a[20];
	printf("Enter str:");
	gets(a);
	strupr(a);
	printf("%s",a);
	return 0;
}
