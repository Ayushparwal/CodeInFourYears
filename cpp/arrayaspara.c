#include<stdio.h>
void display(int *p,int c){
    for(int i=0;i<c;i++){
        printf("%d ",*p);
        p++;
    }
}
int main(){
    int a[5]= {10,51,7,6,14};
    display(a,5);
}