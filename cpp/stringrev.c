#include<stdio.h>
int main(){
    char s[]="Ayush parwal";
    int i,j,t;
    for(i=0;s[i]!='\0';i++){
    }
    i=i-1;
    for(j=0;j<i;j++,i--){
        t=s[j];
        s[j]=s[i];
        s[i]=t;

    }
    printf("%s",s);

    
}