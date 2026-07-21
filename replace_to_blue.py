import os

def replace_colors(directory):
    for root, dirs, files in os.walk(directory):
        for file in files:
            if file.endswith('.blade.php'):
                filepath = os.path.join(root, file)
                with open(filepath, 'r') as f:
                    content = f.read()
                
                # Replace orange- with blue-
                new_content = content.replace('orange-', 'blue-')
                
                if new_content != content:
                    with open(filepath, 'w') as f:
                        f.write(new_content)
                    print(f"Updated {filepath}")

if __name__ == '__main__':
    replace_colors('/home/mchyns/Documents/web-sekolah/resources/views')
