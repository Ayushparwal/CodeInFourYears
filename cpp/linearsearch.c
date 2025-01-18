#include<stdio.h>
int main(){
    int a[5],count=0;
    printf("Enter the number in array :");
    for(int i =0;i<5;i++){
        scanf("%d",&a[i]);
    }
    int element;
    scanf("%d",&element);

    for(int i=0;i<5;i++){
        if(a[i]==element){
            count++;
            

            printf("the index is %d\n",i);

        }
    }
    printf("the count is %d\n",count);
    return 0;
}